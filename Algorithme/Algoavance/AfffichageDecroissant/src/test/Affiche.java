package test;

public class Affiche {
/* appel récursif terminal
	public static void main(String[] args) 
	{
	  int i=10;
	  int n=1;
	  affiche(i,n);
	 
	}
	public static void affiche(int i,int n)
	{
		if (i>=n)
		{
			System.out.println(i);
			affiche(i-1,n);
			
		}
	}
	*/
	
	// appel récursif terminal
	public static void main(String[] args) 
	{
	  int i=1;
	  int n=10;
	  affiche(i,n);
	 
	}
	public static void affiche(int i,int n)
	{
		if (i<=n)
		{
			
			affiche(i+1,n);
			System.out.println(i);
		}
	
}
}