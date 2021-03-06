<?php
namespace Sebastian301082;
use Sebastian301082\Console\ConsoleQuestions;
use Sebastian301082\Console\ConsoleReader;
use Sebastian301082\Console\ConsoleWriter;

/**
 * @author Sebastian Thoss
 */
class Factory
{
    /**
     * @return ConsoleQuestions
     */
    public function createConsoleQuestions()
    {
        return new ConsoleQuestions(
            $this->createConsoleReader(),
            $this->createConsoleWriter()
        );
    }

    /**
     * @return ConsoleWriter
     */
    public function createConsoleWriter()
    {
        return new ConsoleWriter();
    }

    /**
     * @return ConsoleReader
     */
    private function createConsoleReader()
    {
        return new ConsoleReader();
    }
}