<?php
use Migrations\AbstractSeed;

/**
 * Duenos seed.
 */
class DuenosSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
		//Dueño 1
		$data= [
			'nombre' => 'Julio Diaz',
			'rut'  => '18502184-k',
			'direccion'   => 'Osorno 6095',
			'telefono'      => '+56949357993',
			'correo'   => 'jdm006@gmail.com',
			'created'    => date("Y-m-d H:i:s"),
			'modified'   => date("Y-m-d H:i:s")
        ];
        $table = $this->table('duenos');
        $table->insert($data)->save();

		//Dueño 2
		$data= [
			'nombre' => 'Barbara Hormazabal',
            'rut'  => '18505184-0',
			'direccion'   => 'General Velasquez 1075',
			'telefono'      => '+56988886981',
			'correo'   => 'bhp001@gmail.com',
			'created'    => date("Y-m-d H:i:s"),
			'modified'   => date("Y-m-d H:i:s")
        ];
        $table = $this->table('duenos');
        $table->insert($data)->save();

		//Dueño 3
		$data= [
			'nombre' => 'Amelie Abrigo',
            'rut'  => '16508184-2',
			'direccion'   => 'Osorno 6095',
			'telefono'      => '+56992198470',
			'correo'   => 'aad001@gmail.com',
			'created'    => date("Y-m-d H:i:s"),
			'modified'   => date("Y-m-d H:i:s")
        ];
        $table = $this->table('duenos');
        $table->insert($data)->save();
    }
}
