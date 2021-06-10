package com.example.soap_weather;

import java.util.ArrayList;
import java.util.List;

public class Forecast {

    private List<Weather> data = new ArrayList<>();

    public Forecast() {
        for (int i = 0; i < 7; i++)
            data.add(new Weather());
    }

    public List<Weather> getAsWeatherList(){
        return this.data;
    }

    //Konsolentesting
    public String toString() {
        String out = "";
        for (int i = 0; i < data.size(); i++)
            out += data.get(i) + "\n";
        return out;
    }


}
