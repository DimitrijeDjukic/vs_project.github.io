//
// Diese Datei wurde mit der JavaTM Architecture for XML Binding(JAXB) Reference Implementation, v2.3.2 generiert 
// Siehe <a href="https://javaee.github.io/jaxb-v2/">https://javaee.github.io/jaxb-v2/</a> 
// Änderungen an dieser Datei gehen bei einer Neukompilierung des Quellschemas verloren. 
// Generiert: 2021.06.13 um 06:10:30 PM CEST 
//


package fh.vs_project.models.soap.weather;

import javax.xml.bind.annotation.XmlRegistry;


/**
 * This object contains factory methods for each 
 * Java content interface and Java element interface 
 * generated in the fh.vs_project.models.soap.weather package. 
 * <p>An ObjectFactory allows you to programatically 
 * construct new instances of the Java representation 
 * for XML content. The Java representation of XML 
 * content can consist of schema derived interfaces 
 * and classes representing the binding of schema 
 * type definitions, element declarations and model 
 * groups.  Factory methods for each of these are 
 * provided in this class.
 * 
 */
@XmlRegistry
public class ObjectFactory {


    /**
     * Create a new ObjectFactory that can be used to create new instances of schema derived classes for package: fh.vs_project.models.soap.weather
     * 
     */
    public ObjectFactory() {
    }

    /**
     * Create an instance of {@link GetForecastRespond }
     * 
     */
    public GetForecastRespond createGetForecastRespond() {
        return new GetForecastRespond();
    }

    /**
     * Create an instance of {@link GetCurrentWeatherRequest }
     * 
     */
    public GetCurrentWeatherRequest createGetCurrentWeatherRequest() {
        return new GetCurrentWeatherRequest();
    }

    /**
     * Create an instance of {@link GetCurrentWeatherResponse }
     * 
     */
    public GetCurrentWeatherResponse createGetCurrentWeatherResponse() {
        return new GetCurrentWeatherResponse();
    }

    /**
     * Create an instance of {@link GetWindRequest }
     * 
     */
    public GetWindRequest createGetWindRequest() {
        return new GetWindRequest();
    }

    /**
     * Create an instance of {@link GetWindResponse }
     * 
     */
    public GetWindResponse createGetWindResponse() {
        return new GetWindResponse();
    }

    /**
     * Create an instance of {@link Wind }
     * 
     */
    public Wind createWind() {
        return new Wind();
    }

    /**
     * Create an instance of {@link GetForecastRequest }
     * 
     */
    public GetForecastRequest createGetForecastRequest() {
        return new GetForecastRequest();
    }

    /**
     * Create an instance of {@link GetForecastRespond.Weather }
     * 
     */
    public GetForecastRespond.Weather createGetForecastRespondWeather() {
        return new GetForecastRespond.Weather();
    }

}
