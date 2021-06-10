package com.example.soap_weather;

import fh.vs_project.models.soap.weather.GetForecastRespond;

public class Weather extends GetForecastRespond.Weather {

    public double getTemperatureForecast() {
        return temperature;
    }

    public fh.vs_project.models.soap.weather.Wind getWindForecast(){
        return this.wind;
    }
    public Weather() {
        super();
        wind = new Wind();
        temperature = Math.round(100 * Math.random() % 60 -20);
    }

    //Konsolentesting
    public String toString(){
        String out = "Temperatur: ";
        out += temperature + " C° " + wind.toString();
        return out;
    }

}
