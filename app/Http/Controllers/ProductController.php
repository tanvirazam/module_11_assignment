<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view("frontend.pages.dashboard", compact('products'));
    }

    public function create()
    {
        return view("frontend.pages.create");
    }

    public function createData(Request $request)
    {
        $result = DB::table('products')->insert([
            "name" => $request->name,
            "quantity" => $request->quantity,
            "price" => $request->price,

        ]);

        if ($result) {
            return redirect()->back()->with("message", "Data Inserted");
        } else {
            return redirect()->back()->with("message", "Something Went Wrong");
        }

    }

    public function destroy($id)
    {
        $deleteProduct = DB::table('products')->where('id', '=', $id)->delete();
        return redirect()->back();
    }


    public function edit($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view("frontend.pages.update", compact('product'));
    }

    public function update(Request $request, $id)
    {
        $updateData = DB::table('products')->where('id', $id)->update([
            "name" => $request->name,
            "quantity" => $request->quantity,
            "price" => $request->price,
        ]);

        if ($updateData) {
            return redirect(route('frontend.pages.dashboard'));
        } else {
            return redirect()->back()->with("message", "Something Went Wrong");
        }
    }

    public function sell($id)
    {
        $product = DB::table("products")->where('id', $id)->first();
        return view('frontend.pages.transaction', compact('product'));
    }

    public function transactions(Request $request, $id)
    {

        $product = DB::table('products')->where('id', $id)->first();

        $result = DB::table('transactions')->insert([
            "name" => $product->name,
            "quantity" => $product->quantity,
            "price" => $request->price,
        ]);

        return redirect(route("frontend.pages.dashboard"));
    }



    private function getSalesForDate($date)
    {
        return DB::table('transactions')
            ->whereDate('created_at', $date)
            ->orWhereDate('updated_at', $date)
            ->sum('price');
    }

    private function getSalesForDateRange($start, $end)
    {
        return DB::table('transactions')
            ->whereBetween('created_at', [$start, $end])
            ->orWhereBetween('updated_at', [$start, $end])
            ->sum('price');
    }

    public function showTransactions()
    {
        $transactions = DB::table('transactions')->get();


        $today = Carbon::today();
        $yesterday = Carbon::yesterday();
        $startOfMonth = Carbon::now()->startOfMonth();
        $startOfLastMonth = Carbon::now()->startOfMonth()->subMonth();

        $salesToday = $this->getSalesForDate($today);
        $salesYesterday = $this->getSalesForDate($yesterday);
        $salesThisMonth = $this->getSalesForDateRange($startOfMonth, Carbon::now());
        $salesLastMonth = $this->getSalesForDateRange($startOfLastMonth, $startOfMonth);


        return view("frontend.pages.transactions_data", compact('salesToday', 'salesYesterday', 'salesThisMonth', 'salesLastMonth', 'transactions'));
    }


    public function destroyTransaction($id)
    {
        $destroyTransaction = DB::table('transactions')->where('id', $id)->delete();
        return redirect()->back();
    }

}
