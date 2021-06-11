package com.example.soap_weather;

import org.springframework.stereotype.Component;

import javax.annotation.PostConstruct;


@Component
public class CurrentWeatherRepository {
public int test;
    @PostConstruct
    public void initData(){}

    // Random Temperature
    public float getTemperature (){
        return (float) (Math.random()*40);
    }
    public  Wind getWind(){return new Wind();}
    public Forecast getForecast(){return new Forecast();}

}

