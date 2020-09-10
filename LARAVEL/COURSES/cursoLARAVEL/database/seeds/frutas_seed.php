<?php

use Illuminate\Database\Seeder;

class frutas_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Así generamos 20 registros con un solo comando de artisan seed */
        for($i = 0; $i < 20; $i++){
            DB::table('frutas')->insert(array(
                'nombre' => 'Cereza ' . $i,
                'descripcion' => 'descripcion de la fruta ' . $i,
                'precio' => $i,
                'fecha' => date('Y-m-m')
            ));
        }
        /* Permite generar un mensaje por la consola de comandos */
        $this->command->info('La tabla de frutas ha sido rellenada');
    }
}
