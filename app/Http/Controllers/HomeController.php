<?php

namespace App\Http\Controllers;

use App;
use App\Http\Requests;
use App\Job;
use App\Resume;
use App\Site;
use App\Skill;
use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('#app')
            ->withResume(Resume::first())
            ->withSites(Site::all());
    }

    /**
     * Send me an email.
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {

        Mail::send('emails.contact', ['data' => $request], function ($mail) use ($request) {
            $mail->from($request->get('email'), env('APP_NAME'));

            $mail->to(config('mail.to'), 'Rami AlMaleh')->subject('Someone contacted you from ' . env('APP_NAME'));
        });

        return redirect()->back();
    }

    /**
     * Download resume.
     * @return \Illuminate\Http\Response
     */
    public function resume()
    {

        $pdf = \PDF::loadView('pdf.resume', [
            'resume' => Resume::first(),
            'sites'  => Site::all()
        ]);

        return $pdf->download('Rami AlMaleh.pdf');
    }

    public function csvUpdate()
    {
        return view('csv-form');
    }

    public function updateCsv()
    {
        //foreach csv

            //collect column names

            //make column names sql friendly

            //create table with columns

            //import csv to table
//        \DB::unprepared('LOAD DATA INFILE \'noname.csv\'
            //INTO TABLE csv_update
            //FIELDS TERMINATED BY \'|\' OPTIONALLY ENCLOSED BY \'"\'
            //LINES TERMINATED BY \'\n\'
            //(item_type,product_id,product_name,product_type,product_codesku,bin_picking_number,brand_name,option_set,option_set_align,product_description,price,cost_price,retail_price,sale_price,fixed_shipping_cost,free_shipping,product_warranty,product_weight,product_width,product_height,product_depth,allow_purchases,product_visible,product_availability,track_inventory,current_stock_level,low_stock_level,category,product_image_id_1,product_image_file_1,product_image_description_1,product_image_is_thumbnail_1,product_image_sort_1,product_image_id_2,product_image_file_2,product_image_description_2,product_image_is_thumbnail_2,product_image_sort_2,product_image_id_3,product_image_file_3,product_image_description_3,product_image_is_thumbnail_3,product_image_sort_3,product_image_id_4,product_image_file_4,product_image_description_4,product_image_is_thumbnail_4,product_image_sort_4,product_image_id_5,product_image_file_5,product_image_description_5,product_image_is_thumbnail_5,product_image_sort_5,product_image_id_6,product_image_file_6,product_image_description_6,product_image_is_thumbnail_6,product_image_sort_6,product_image_id_7,product_image_file_7,product_image_description_7,product_image_is_thumbnail_7,product_image_sort_7,product_image_id_8,product_image_file_8,product_image_description_8,product_image_is_thumbnail_8,product_image_sort_8,search_keywords,page_title,meta_keywords,meta_description,myob_asset_acct,myob_income_acct,myob_expense_acct,product_condition,show_product_condition,event_date_required,event_date_name,event_date_is_limited,event_date_start_date,event_date_end_date,sort_order,product_tax_class,product_upcean,stop_processing_rules,product_url,redirect_old_url,gps_global_trade_item_number,gps_manufacturer_part_number,gps_gender,gps_age_group,gps_color,gps_size,gps_material,gps_pattern,gps_item_group_id,gps_category,gps_enabled,avalara_product_tax_code,product_custom_fields);');

        //update one row at a time


        //export result table to csv


        dd($_FILES, $_POST);
    }


}
