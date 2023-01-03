import java.util.Scanner;

public class Point {

    // les attributs
    private double x;
    private double y;

    //le premier constructeur
    public Point() {
    }
// constructeur
    public Point(double x, double y) {
        this.x = x;
        this.y = y;
    }
// constructeur de la class point
    public Point(Point point) {
        this.x = point.x;
        this.y = point.y;
    }
//getter setter
    public double getX() {
        return x;
    }

    public void setX(double x) {
        this.x = x;
    }

    public double getY() {
        return y;
    }

    public void setY(double y) {
        this.y = y;
    }
// les methodes
    public  double distance (){
      double distance=0;
        return distance;
    }
    public double distance(double x, double y) {
        return Math.sqrt(Math.pow(x - this.x, 2) + Math.pow(y - this.y, 2));
    }



    public static double distance(double x1, double y1, double x2, double y2) {
         return Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));

    }

   /* public void deplacer(double x, double y) {
        this.x = x;
        this.y = y;
    }

    public Point translater(double dx, double dy) {
        return new Point(x + dx, y + dy);
    }*/

    public String toString() {
        return "Point : x = " + this.x + " ; y = " + this.y;
    }
}