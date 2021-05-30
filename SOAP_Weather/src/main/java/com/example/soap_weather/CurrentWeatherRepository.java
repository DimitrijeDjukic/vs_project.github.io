package com.example.soap_weather;

import org.springframework.stereotype.Component;

import javax.annotation.PostConstruct;


@Component
public class CurrentWeatherRepository {

    @PostConstruct
    public void initData(){}

    public float getTemperature (){
        return (float) (Math.random()*40);
    }
}

