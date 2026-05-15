<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::firstOrCreate(['slug' => 'medicamentos'], ['name' => 'Medicamentos']);
        $supplier = Supplier::firstOrCreate(['name' => 'Distribuidora Farma Central']);

        $products = [
            [
                'name' => 'Acetaminofen 500 mg',
                'sku' => 'MED-ACET-500',
                'generic_name' => 'Acetaminofen',
                'brand_name' => 'Tylenol',
                'active_ingredient' => 'Paracetamol',
                'concentration' => '500 mg',
                'pharmaceutical_form' => 'Tableta',
                'presentation' => 'Caja x 20',
                'unit_measure' => 'Tableta',
                'sale_price' => 3.50,
                'cost_price' => 2.10,
                'stock' => 120,
                'min_stock' => 20,
            ],
            [
                'name' => 'Acetaminofen Jarabe 120 mg / 5 ml',
                'sku' => 'MED-ACET-JBE',
                'generic_name' => 'Acetaminofen',
                'brand_name' => 'Tempra',
                'active_ingredient' => 'Paracetamol',
                'concentration' => '120 mg / 5 ml',
                'pharmaceutical_form' => 'Jarabe',
                'presentation' => 'Frasco x 120 ml',
                'unit_measure' => 'ml',
                'sale_price' => 6.80,
                'cost_price' => 4.60,
                'stock' => 35,
                'min_stock' => 8,
            ],
            [
                'name' => 'Ibuprofeno Jarabe 100 mg / 5 ml',
                'sku' => 'MED-IBU-JBE',
                'generic_name' => 'Ibuprofeno',
                'brand_name' => 'Advil Infantil',
                'active_ingredient' => 'Ibuprofeno',
                'concentration' => '100 mg / 5 ml',
                'pharmaceutical_form' => 'Jarabe',
                'presentation' => 'Frasco x 120 ml',
                'unit_measure' => 'ml',
                'sale_price' => 7.90,
                'cost_price' => 5.20,
                'stock' => 45,
                'min_stock' => 10,
            ],
            [
                'name' => 'Ibuprofeno 400 mg',
                'sku' => 'MED-IBU-400',
                'generic_name' => 'Ibuprofeno',
                'brand_name' => 'Advil',
                'active_ingredient' => 'Ibuprofeno',
                'concentration' => '400 mg',
                'pharmaceutical_form' => 'Tableta',
                'presentation' => 'Caja x 10',
                'unit_measure' => 'Tableta',
                'sale_price' => 4.20,
                'cost_price' => 2.80,
                'stock' => 80,
                'min_stock' => 15,
            ],
            [
                'name' => 'Amoxicilina 500 mg',
                'sku' => 'MED-AMOX-500',
                'generic_name' => 'Amoxicilina',
                'brand_name' => 'Amoxil',
                'active_ingredient' => 'Amoxicilina',
                'concentration' => '500 mg',
                'pharmaceutical_form' => 'Cápsula',
                'presentation' => 'Caja x 12',
                'unit_measure' => 'Cápsula',
                'sale_price' => 8.90,
                'cost_price' => 6.10,
                'stock' => 50,
                'min_stock' => 12,
            ],
            [
                'name' => 'Loratadina 10 mg',
                'sku' => 'MED-LORA-10',
                'generic_name' => 'Loratadina',
                'brand_name' => 'Clarityne',
                'active_ingredient' => 'Loratadina',
                'concentration' => '10 mg',
                'pharmaceutical_form' => 'Tableta',
                'presentation' => 'Caja x 10',
                'unit_measure' => 'Tableta',
                'sale_price' => 5.40,
                'cost_price' => 3.30,
                'stock' => 70,
                'min_stock' => 10,
            ],
            [
                'name' => 'Omeprazol 20 mg',
                'sku' => 'MED-OMEP-20',
                'generic_name' => 'Omeprazol',
                'brand_name' => 'Losec',
                'active_ingredient' => 'Omeprazol',
                'concentration' => '20 mg',
                'pharmaceutical_form' => 'Cápsula',
                'presentation' => 'Caja x 14',
                'unit_measure' => 'Cápsula',
                'sale_price' => 7.50,
                'cost_price' => 4.90,
                'stock' => 65,
                'min_stock' => 12,
            ],
            [
                'name' => 'Salbutamol Inhalador 100 mcg',
                'sku' => 'MED-SALB-INH',
                'generic_name' => 'Salbutamol',
                'brand_name' => 'Ventolin',
                'active_ingredient' => 'Salbutamol',
                'concentration' => '100 mcg',
                'pharmaceutical_form' => 'Inhalador',
                'presentation' => 'Frasco x 200 dosis',
                'unit_measure' => 'Dosis',
                'sale_price' => 18.90,
                'cost_price' => 13.50,
                'stock' => 22,
                'min_stock' => 5,
            ],
            [
                'name' => 'Diclofenaco Gel 1%',
                'sku' => 'MED-DICLO-GEL',
                'generic_name' => 'Diclofenaco',
                'brand_name' => 'Voltaren',
                'active_ingredient' => 'Diclofenaco dietilamina',
                'concentration' => '1%',
                'pharmaceutical_form' => 'Gel',
                'presentation' => 'Tubo x 50 g',
                'unit_measure' => 'g',
                'sale_price' => 9.80,
                'cost_price' => 6.70,
                'stock' => 28,
                'min_stock' => 6,
            ],
            [
                'name' => 'Clotrimazol Crema 1%',
                'sku' => 'MED-CLOT-CRE',
                'generic_name' => 'Clotrimazol',
                'brand_name' => 'Canesten',
                'active_ingredient' => 'Clotrimazol',
                'concentration' => '1%',
                'pharmaceutical_form' => 'Crema',
                'presentation' => 'Tubo x 20 g',
                'unit_measure' => 'g',
                'sale_price' => 6.20,
                'cost_price' => 4.10,
                'stock' => 32,
                'min_stock' => 8,
            ],
            [
                'name' => 'Vitamina C 500 mg',
                'sku' => 'MED-VITC-500',
                'generic_name' => 'Ácido ascórbico',
                'brand_name' => 'Redoxon',
                'active_ingredient' => 'Vitamina C',
                'concentration' => '500 mg',
                'pharmaceutical_form' => 'Tableta',
                'presentation' => 'Caja x 30',
                'unit_measure' => 'Tableta',
                'sale_price' => 10.50,
                'cost_price' => 7.20,
                'stock' => 40,
                'min_stock' => 10,
            ],
            [
                'name' => 'Suero Oral 500 ml',
                'sku' => 'MED-SUERO-500',
                'generic_name' => 'Sales de rehidratación oral',
                'brand_name' => 'Pedialyte',
                'active_ingredient' => 'Electrolitos',
                'concentration' => 'Solución oral',
                'pharmaceutical_form' => 'Solución',
                'presentation' => 'Frasco x 500 ml',
                'unit_measure' => 'ml',
                'sale_price' => 5.90,
                'cost_price' => 3.80,
                'stock' => 55,
                'min_stock' => 12,
            ],
        ];

        foreach ($products as $data) {
            Product::firstOrCreate(
                ['sku' => $data['sku']],
                array_merge($data, [
                    'category_id' => $category->id,
                    'supplier_id' => $supplier->id,
                    'status' => 'active',
                ])
            );
        }
    }
}
