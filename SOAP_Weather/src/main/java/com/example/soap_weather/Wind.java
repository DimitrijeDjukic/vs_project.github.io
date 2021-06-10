package com.example.soap_weather;

public class Wind extends fh.vs_project.models.soap.weather.Wind {

    public Wind() {
        direction = headingToString2(1000 * Math.random());
        velocity = Math.round(50 * Math.random() % 350);
    }

    public double getVelocity() {
        return velocity;
    }

    public String getDirection() {
        return direction;
    }

    public static String headingToString2(double x)
    {
        String directions[] = {"N", "NE", "E", "SE", "S", "SW", "W", "NW", "N"};
        return directions[ (int)Math.round((  ((double)x % 360) / 45)) ];
    }


    public String toString(){
        String out = "Velocity: ";
        out += velocity + " Km/h Direction " + direction;
        return out;
    }
}
