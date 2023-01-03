    public class TestPoint {
        public static void main(String [] args) {
        Point p = new Point();
        p.initialiser(10, 20);
        p.afficher();
        }
       }
       class Point {
        private int x ;
        private int y ;
        public void initialiser(int abs, int ord) {
        x = abs ;
        y = ord ;
        }
        public void deplacer(int dx, int dy) {
        x += dx ;
        y += dy ;
        }
        public void afficher() {
        System.out.println("Point ("+x+", "+y+")");
        }
       }

