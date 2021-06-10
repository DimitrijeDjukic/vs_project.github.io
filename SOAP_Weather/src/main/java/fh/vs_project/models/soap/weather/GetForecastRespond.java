//
// Diese Datei wurde mit der JavaTM Architecture for XML Binding(JAXB) Reference Implementation, v2.3.2 generiert 
// Siehe <a href="https://javaee.github.io/jaxb-v2/">https://javaee.github.io/jaxb-v2/</a> 
// Änderungen an dieser Datei gehen bei einer Neukompilierung des Quellschemas verloren. 
// Generiert: 2021.06.10 um 07:51:57 PM CEST 
//


package fh.vs_project.models.soap.weather;

import com.example.soap_weather.Forecast;

import java.util.ArrayList;
import java.util.List;
import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlType;


/**
 * <p>Java-Klasse für anonymous complex type.
 * 
 * <p>Das folgende Schemafragment gibt den erwarteten Content an, der in dieser Klasse enthalten ist.
 * 
 * <pre>
 * &lt;complexType&gt;
 *   &lt;complexContent&gt;
 *     &lt;restriction base="{http://www.w3.org/2001/XMLSchema}anyType"&gt;
 *       &lt;sequence&gt;
 *         &lt;element name="weather" maxOccurs="unbounded" minOccurs="0"&gt;
 *           &lt;complexType&gt;
 *             &lt;complexContent&gt;
 *               &lt;restriction base="{http://www.w3.org/2001/XMLSchema}anyType"&gt;
 *                 &lt;sequence&gt;
 *                   &lt;element name="temperature" type="{http://www.w3.org/2001/XMLSchema}double"/&gt;
 *                   &lt;element name="wind" type="{http://vs_project.fh/models/soap/weather}wind"/&gt;
 *                 &lt;/sequence&gt;
 *               &lt;/restriction&gt;
 *             &lt;/complexContent&gt;
 *           &lt;/complexType&gt;
 *         &lt;/element&gt;
 *       &lt;/sequence&gt;
 *     &lt;/restriction&gt;
 *   &lt;/complexContent&gt;
 * &lt;/complexType&gt;
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "", propOrder = {
    "weather"
})
@XmlRootElement(name = "getForecastRespond")
public class GetForecastRespond {

    protected List<GetForecastRespond.Weather> weather;

    /**
     * Gets the value of the weather property.
     * 
     * <p>
     * This accessor method returns a reference to the live list,
     * not a snapshot. Therefore any modification you make to the
     * returned list will be present inside the JAXB object.
     * This is why there is not a <CODE>set</CODE> method for the weather property.
     * 
     * <p>
     * For example, to add a new item, do as follows:
     * <pre>
     *    getWeather().add(newItem);
     * </pre>
     * 
     * 
     * <p>
     * Objects of the following type(s) are allowed in the list
     * {@link GetForecastRespond.Weather }
     * 
     * 
     */
    public List<GetForecastRespond.Weather> getWeather() {
        if (weather == null) {
            weather = new ArrayList<GetForecastRespond.Weather>();
        }
        return this.weather;
    }

    public void setForecast(Forecast forecast) {
    }


    /**
     * <p>Java-Klasse für anonymous complex type.
     * 
     * <p>Das folgende Schemafragment gibt den erwarteten Content an, der in dieser Klasse enthalten ist.
     * 
     * <pre>
     * &lt;complexType&gt;
     *   &lt;complexContent&gt;
     *     &lt;restriction base="{http://www.w3.org/2001/XMLSchema}anyType"&gt;
     *       &lt;sequence&gt;
     *         &lt;element name="temperature" type="{http://www.w3.org/2001/XMLSchema}double"/&gt;
     *         &lt;element name="wind" type="{http://vs_project.fh/models/soap/weather}wind"/&gt;
     *       &lt;/sequence&gt;
     *     &lt;/restriction&gt;
     *   &lt;/complexContent&gt;
     * &lt;/complexType&gt;
     * </pre>
     * 
     * 
     */
    @XmlAccessorType(XmlAccessType.FIELD)
    @XmlType(name = "", propOrder = {
        "temperature",
        "wind"
    })
    public static class Weather {

        protected double temperature;
        @XmlElement(required = true)
        protected Wind wind;

        /**
         * Ruft den Wert der temperature-Eigenschaft ab.
         * 
         */
        public double getTemperature() {
            return temperature;
        }

        /**
         * Legt den Wert der temperature-Eigenschaft fest.
         * 
         */
        public void setTemperature(double value) {
            this.temperature = value;
        }

        /**
         * Ruft den Wert der wind-Eigenschaft ab.
         * 
         * @return
         *     possible object is
         *     {@link Wind }
         *     
         */
        public Wind getWind() {
            return wind;
        }

        /**
         * Legt den Wert der wind-Eigenschaft fest.
         * 
         * @param value
         *     allowed object is
         *     {@link Wind }
         *     
         */
        public void setWind(Wind value) {
            this.wind = value;
        }

    }

}
