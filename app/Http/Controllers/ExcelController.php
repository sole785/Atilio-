<?php

namespace AtilioDominguez\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use AtilioDominguez\Http\Controllers\Controller;

class ExcelController extends Controller
{
    
    public function index() {

       return view('importar');
        
    }

    public function importUsers(Request $request)
    {
        Excel::load($request->excel, function($reader) {
        //Excel::load('CARGA_PRODUCTO.xlsx', function ($reader) {

            $excel = $reader->get();
            echo 'Adentro';
            // iteracción
            // $reader->each(function($row) {

            //     $products = new products;
            //     $products->detalle = $row->detalle;
            //     $products->cantidad = $row->cantidad;
            //     $products->precio = $row->precio;
            //     $products->imagen = "";
            //     $products->created_at = date;
            //     $products->updated_at = date;
            //     $products->save();
            // });
            foreach ($reader->get() as $key => $row) {
                $products = [
                    'idProducto' => increments('id'),
                    'detalle' => $row['detalle'],
                    'cantidad' => $row['cantidad'],
                    'precio' => $row['precio'],
                    'imagen' => $row['imagen'],
                    
                ];
                /** Una vez obtenido los datos de la fila procedemos a registrarlos */
                if (!empty($products)) {
                    DB::table('products')->insert($products);
                }
            }
            echo 'Los productos han sido importados exitosamente';




        
        });

        return "Terminado";
    }

}

