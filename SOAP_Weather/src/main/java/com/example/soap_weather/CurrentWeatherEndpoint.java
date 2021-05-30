package com.example.soap_weather;


import fh.vs_project.models.soap.weather.GetCurrentWeatherResponse;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.ws.server.endpoint.annotation.Endpoint;
import org.springframework.ws.server.endpoint.annotation.PayloadRoot;
import org.springframework.ws.server.endpoint.annotation.ResponsePayload;

@Endpoint
public class CurrentWeatherEndpoint {
    private static final String NAMESPACE_URI = "http://vs_project.fh/models/soap/weather";

    private CurrentWeatherRepository currentWeatherRepository;


    @Autowired
    public CurrentWeatherEndpoint(CurrentWeatherRepository currentWeatherRepository) {
        this.currentWeatherRepository = currentWeatherRepository;
    }

    @PayloadRoot(namespace = NAMESPACE_URI, localPart = "getCurrentWeatherRequest")
    @ResponsePayload
    public GetCurrentWeatherResponse getWeather() {
        GetCurrentWeatherResponse response = new GetCurrentWeatherResponse();
        response.setWeather(currentWeatherRepository.getTemperature());

        return response;
    }
}
