<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class DBAdaptor {
	public $path = 'test';
};

class ProjectAdaptor {
    public function execute() {
        print ("proj exec"); 
    }
};
 
class bake extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'command:bake';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Porting of cake bake for model creation.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		print("fire:\n");
        $model = $this->argument('model');
        print("Model: $model\n");
        $s = new BakeShell();
		$s->DbConfig = new DBAdaptor();
		$s->Project = new ProjectAdaptor();
        $s->Model = new ModelTask();
        $s->Model->execute();
        #$s->main();

	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('model', InputArgument::REQUIRED, 'bake model.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
		);
	}

}
