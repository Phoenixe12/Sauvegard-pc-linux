package test;

public class Affichage {

	/* appel r�cursif terminal 
	public static void main(String[] args)
	{
		int n=10;
		int i=1;
		affiche(i,n);
		
		
	}
	public static void affiche(int i,int n)
	{
		if (i<=n)
		{
			System.out.println(i);
			affiche(i+1,n);
		}
	*/
	// appel r�cursif non terminal
		public static void main(String[] args)
		{
			int n=10;
			int i=1;
			affiche(n,i);
			
			
		}
		public static void affiche(int n,int i)
		{
			if (n>=i)
			{
				
				affiche(n-1,i);
				System.out.println(n);
			}
	
	}

}
