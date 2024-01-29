<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Service\WeatherUtil;
use App\Service\LocationUtil;
#[AsCommand(
    name: 'weather:location',
    description: 'Add a short description for your command',
)]
class WeatherLocationCommand extends Command
{
    public function __construct(
        private readonly WeatherUtil $weatherUtil,
        private readonly LocationUtil $locationUtil,
        string $name = null
    )
    {
        parent::__construct($name);
    }

    protected function configure(): void
    {
        $this
            ->addArgument('city', InputArgument::REQUIRED, 'city name')
            ->addArgument('country_code', InputArgument::OPTIONAL, 'Code of coutry')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $countryCode = $input->getArgument('country_code');
        $cityName = $input->getArgument('city');

        if($countryCode){
            $location = $this->locationUtil->getLocationByCountryAndCity($countryCode,$cityName);
        }else
        {
            $location = $this->locationUtil->getLocationByString($cityName);
        }
        if($location){
            $measurements = $this->weatherUtil->getWeatherForLocation($location);
            $io->writeln(sprintf('Location: %s', $location->getCity()));
            foreach ($measurements as $measurement) {
                $io->writeln(sprintf("\t%s: %s",
                    $measurement->getTimestamp()->format('Y-m-d'),
                    $measurement->getTemperature()
                ));
            }
        }else{
            $io->writeln(sprintf('WRONG LOCATION'));
        }
       
        return Command::SUCCESS;
 
    }
}
