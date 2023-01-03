public class Complexe {
    
    public double x ;
    public double y ;
    public final static Complexe i=new Complexe(0,1);
    public Complexe() {
        this.x=0 ;
        this.y=0 ;
        }
         public Complexe(double x) {
           this.x=x ;
           this.y=0 ;
         }
     public Complexe(double x,double y) {
        this.x=x ;
        this.y=y ;
        }
     public static Complexe polaire(double r,double theta) {
         return new Complexe(r*Math.cos(theta),r*Math.sin(theta)) ;
        }
    public Complexe plus(Complexe z) {
        return new Complexe(x+z.x,y+z.y) ;
        }
         public void conjugue() {
         y=-y ;
         }

         public double norme2() {
             return x*x+y*y ;
             }
            public String toString() {
             if (y>0)
             return x+" + " +y+" i" ;
             if (y<0)
            return x+" - "+(-y)+" i" ;
            return x+"" ;
             }
         }

         public  static void MainComplexe (String[] args) {
            
             public static void main(String[] arg) {
        /* construction de a=0, b=1.0, c=1.0+i */
            Complexe a=new Complexe() ;
             Complexe b=new Complexe(1.) ;
             Complexe c=new Complexe(1.,1.) ;
            
             /* affichages de a, b, c */
             System.out.println(a) ;
             System.out.println(b) ;
        }

    }