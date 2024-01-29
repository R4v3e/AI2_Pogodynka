<?php

namespace App\Command;

use App\Repository\ForecastRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Service\WeatherUtil;
use App\Service\LocationUtil;
use App\Repository\LocationRepository;
#[AsCommand(
    name: 'weather:location_id',
    description: 'Add a short description for your command',
)]
class WeatherLocationIdCommand extends Command
{
    public function __construct(  
        private readonly WeatherUtil $weatherUtil,
        private readonly LocationUtil $locationUtil,
        private readonly LocationRepository $locationRepository,
        // private readonly ForecastRepository $forecastRepository,
        string $id = null)
    {
      
        parent::__construct($id);
    }

    protected function configure(): void
    {
        $this
            ->addArgument('id', InputArgument::REQUIRED, 'id of location')
            // ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $a_id = $input->getArgument('id');
       
        $measurements = $this->weatherUtil->getWeatherForLocationByID($a_id);
        $location = $this->locationRepository->findById($a_id);
        $io->writeln($location . ':');

        // $io->writeln(sprintf('Location: %s', $location->getCity()));
        // $io->writeln('Measurements Raw Output: ' . print_r($measurements, true));
        foreach ($measurements as $measurement) {
            $io->writeln(sprintf("\t%s: %s",
                $measurement->getTimestamp()->format('Y-m-d'),
                $measurement->getTemperature()
            ));
        }
       
       
        return Command::SUCCESS;
    }
}
