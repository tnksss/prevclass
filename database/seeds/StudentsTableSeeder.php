<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StudentsTableSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('students')->insert([
        	
            ['cgm' => '1004147134','name'=>'ÁGATHA MELO','bornDate' => '2007/01/20'],
            ['cgm' => '359122438','name'=>'AGNER CRISTIANO HARTT','bornDate' => '2006/01/04'],
            ['cgm' => '1003548739','name'=>'AMANDA APARECIDA DE MORAES','bornDate' => '16/01/18'],
            ['cgm' => '1003547716','name'=>'ANA CAROLINI DA CRUZ','bornDate' => '2008/02/18'],
            ['cgm' => '1006206790','name'=>'CAUANE CRISTINA CALDAS','bornDate' => '2006/01/18'],
            ['cgm' => '1004439887','name'=>'DANIELI DE LIMA PADILHA','bornDate' => '16/01/18'],
            ['cgm' => '1006211662','name'=>'ELOIZA BARBOSA DOS SANTOS','bornDate' => '16/01/18'],
            ['cgm' => '1006211182','name'=>'GABRIEL DE OLIVEIRA','bornDate' => '16/01/18'],
            ['cgm' => '959004242','name'=>'GABRIELLE RODRIGUES DOS SANTOS','bornDate' => '16/01/18'],
            ['cgm' => '1004174581','name'=>'GEOVANNA CRYSTINA DA SILVA DE SOUZA','bornDate' => '16/01/18'],
            ['cgm' => '1006199115','name'=>'GRAZIELE DIDUCH DA VEIGA','bornDate' => '16/01/18'],
            ['cgm' => '959103020','name'=>'GUILHERME NUNES MENDES','bornDate' => '16/01/18'],
            ['cgm' => '1003552957','name'=>'GUSTAVO PASSOS ALMEIDA','bornDate' => '16/01/18'],
            ['cgm' => '1003547260','name'=>'KAUÊ LINHARES DE OLIVEIRA','bornDate' => '16/01/18'],
            ['cgm' => '74403816','name'=>'LAUANY DA SILVA TAVARES','bornDate' => '16/01/18'],
            ['cgm' => '359121881','name'=>'LETÍCIA DOS SANTOS','bornDate' => '16/01/18'],
            ['cgm' => '959003840','name'=>'LOISY KAUANE DE LIMA','bornDate' => '16/01/18'],
            ['cgm' => '189507178','name'=>'LUZIA CONCEIÇÃO SOARES DOS SANTOS','bornDate' => '16/01/18'],
            ['cgm' => '1006273765','name'=>'MARIA ISABELE MACHADO DOS SANTOS','bornDate' => '18/02/18'],
            ['cgm' => '74622585','name'=>'MATHEUS HENRIQUE VEIGA DOS SANTOS','bornDate' => '11/09/18'],
            ['cgm' => '358309313','name'=>'MAYARA ROSA','bornDate' => '16/01/18'],
            ['cgm' => '959003629','name'=>'MILENA DE OLIVEIRA ARAUJO','bornDate' => '16/01/18'],
            ['cgm' => '359121156','name'=>'RAIANE APARECIDA BARBOSA DOS SANTOS','bornDate' => '16/01/18'],
            ['cgm' => '359122535','name'=>'RENAN DA SILVA MACHADO','bornDate' => '16/01/18'],
            ['cgm' => '74583202','name'=>'SABRINA DE SOUZA BAIRRO','bornDate' => '16/01/18'],
            ['cgm' => '1006507391','name'=>'SAMARA ROSA','bornDate' => '11/09/18'],
            ['cgm' => '959003165','name'=>'ANNY CRISTINY FONSECA','bornDate' => '16/01/18'],
            ['cgm' => '1016416068','name'=>'NATHALLY SOARES','bornDate' => '16/01/18'],
            ['cgm' => '1003570025','name'=>'HELOISA BORAICO HANYSZ','bornDate' => '17/09/18'],
            ['cgm' => '959002983','name'=>'LUIZ HENRIQUE DA SILVA NICOLAU','bornDate' => '16/01/18']
        ]);

        $this->command->info('Alunos incluídos com sucesso!');
    }
}