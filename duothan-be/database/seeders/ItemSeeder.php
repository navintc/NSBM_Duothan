<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//hash is used for the password
use Illuminate\Support\Facades\Hash;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name' => "Adderall 10mg",
            'description' => "Adderall and Mydayis are trade names for a combination drug called mixed amphetamine salts containing four salts of amphetamine. The mixture is composed of equal parts racemic amphetamine and dextroamphetamine, which produces a ratio between dextroamphetamine and levoamphetamine, the two enantiomers of amphetamine.",
            'qty' => 100,
            'img' => 'adderall.png',
        ]);

        DB::table('items')->insert([
            'name' => "Ketamine 5mg",
            'description' => "Ketamine is a dissociative anesthetic used medically for induction and maintenance of anesthesia. It is also used as a recreational drug. It is one of the safest anesthetics, as, in contrast with opiates, ether, and propofol, it suppresses neither respiration nor heart rate.",
            'qty' => 100,
            'img' => 'ketamine.png',
        ]);

        DB::table('items')->insert([
            'name' => "Amoxicillin 50mg",
            'description' => "Amoxicillin is an antibiotic medication used to treat a number of bacterial infections. These include middle ear infection, strep throat, pneumonia, skin infections, and urinary tract infections among others. It is taken by mouth, or less commonly by injection. Common adverse effects include nausea and rash.",
            'qty' => 150,
            'img' => 'amox.png',
        ]);

        DB::table('items')->insert([
            'name' => "Insulin 25ml",
            'description' => "Insulin is a peptide hormone produced by beta cells of the pancreatic islets encoded in humans by the INS gene. It is considered to be the main anabolic hormone of the body.",
            'qty' => 100,
            'img' => 'insuline.png',
        ]);

        DB::table('items')->insert([
            'name' => "Morphine 10ml",
            'description' => "Morphine is a strong opiate that is found naturally in opium, a dark brown resin in poppies. It is mainly used as a pain medication, and is also commonly used recreationally, or to make other illicit opioids.",
            'qty' => 100,
            'img' => 'morphine.png',
        ]);
    }
}
