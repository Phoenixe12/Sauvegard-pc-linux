package test;

public class Somme {
/* appel récursif terminal intégré dans une expression
	public static void main(String[] args)
	{
	   int n=5;
	   int S=somme(n);
	   System.out.println("la somme vaut:"+S);
	}
   public static int somme(int n)
   {
	   if (n==1)
		   return 1;
	   else
		   return n+somme(n-1);
   }
   */
	public static void main(String[] args)
	{
	   int n=5;
	   int S=0;
	   int i=1;
	   somme(i,n,S);
	}
  public static void somme(int i,int n, int S)
    {
	  if (i<=n)
	  {
		  S=S+i;
		  somme(i+1,n,S);
	  }
		 
	  else
		  System.out.println("Somme:"+S);
    }
  
}
