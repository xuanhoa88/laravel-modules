<?php
namespace Llama\Modules\Contracts;

interface RunableInterface
{

    /**
     * Run the specified command.
     *
     * @param string $command            
     *
     * @return mixed
     */
    public function run($command);
}
