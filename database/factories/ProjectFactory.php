<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }

    /**
     * Define a sequence of states.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function configure()
    {
        return $this->sequence(
            ['application' => 'Memor-i',  'creator' => 'ΚΕΑΤ-Παράρτημα Θεσσαλονίκης' , 'name' =>'Παιχνίδι μνήμης','link'=>'https://memoristudio.scify.org/flavor/522/cards', 'date_of_creation'=>'21-May-2016'],
            ['application' => 'Memor-i', 'creator' => 'SCIFY', 'name' =>'Παιχνίδι μνήμης με τον Θησέα','link'=>'https://memoristudio.scify.org/flavor/442/cards', 'date_of_creation'=>'21-May-2017'],
            ['application' => 'Memor-i', 'creator' => 'SCIFY', 'name' =>'Modern items','link'=>'https://memoristudio.scify.org/flavor/325/cards', 'date_of_creation'=>'22-May-2017'],
            ['application' => 'Memor-i', 'creator' => 'ΚΕΑΤ-Παράρτημα Aθηνα', 'name' =>'Κύκλοι και γραμμές εν δράσει (λίγες κάρτες)','link'=>'https://memoristudio.scify.org/flavor/295/cards', 'date_of_creation'=>'23-May-2017'],
            ['application' => 'Memor-i', 'creator' => 'ΚΕΑΤ-Παράρτημα Aθηνα', 'name' =>'Πασχαλινα έθιμα','link'=>'https://memoristudio.scify.org/flavor/288/cards', 'date_of_creation'=>'24-May-2018'],
            ['application' => 'Memor-i',  'creator' => 'ΚΕΑΤ-Παράρτημα Aθηνα' , 'name' =>'Κύκλοι και γραμμές εν δράσει...','link'=>'https://memoristudio.scify.org/flavor/240/cards', 'date_of_creation'=>'26-May-2019'],
            ['application' => 'Memor-i', 'creator' => 'ΚΕΑΤ-Παράρτημα Θεσσαλονίκης', 'name' =>'Οι Θεοί του Ολύμπου','link'=>'https://memoristudio.scify.org/flavor/232/cards', 'date_of_creation'=>'27-May-2019'],
            ['application' => 'Memor-i', 'creator' => 'ΚΕΑΤ-Παράρτημα Θεσσαλονίκης', 'name' =>'Και αέρα στα πανιά μας !!!','link'=>'https://memoristudio.scify.org/flavor/218/cards', 'date_of_creation'=>'28-May-2020'],
            ['application' => 'Memor-i', 'creator' => 'ΚΕΑΤ-Παράρτημα Θεσσαλονίκης-Παράρτημα Aθηνα', 'name' =>'Το ατύχημα των σχημάτων μια βροχερή μέρα!','link'=>'https://memoristudio.scify.org/flavor/190/cards', 'date_of_creation'=>'28-May-2020'],
            ['application' => 'Memor-i', 'creator' => 'ΚΕΑΤ-Παράρτημα Θεσσαλονίκης', 'name' =>'Μυστήριο στο μουσείο...','link'=>'https://memoristudio.scify.org/flavor/177/cards', 'date_of_creation'=>'28-May-2020'],
            ['application' => 'dianoia', 'creator' => 'SHAPES ΕU team', 'name' =>'Εναλλαγές','link'=>'https://memoristudio.scify.org/flavor/218/cards', 'date_of_creation'=>'26-May-2019'],
            ['application' => 'dianoia', 'creator' => 'SHAPES ΕU team', 'name' =>'Copy Correctly','link'=>'https://memoristudio.scify.org/flavor/190/cards', 'date_of_creation'=>'27-May-2019'],
            ['application' => 'dianoia', 'creator' => 'SHAPES ΕU team', 'name' =>'Σκίαση σχημάτων ','link'=>'https://memoristudio.scify.org/flavor/177/cards', 'date_of_creation'=>'28-May-2020'],
        );
    }
}
