public class Personne 
{ 
  protected String nom; 
  protected String prenom; 
  protected int age; 
  protected String sexe;


  public Personne(String n, String p, int a) 
  {      this.nom = n; 
         this.prenom = p; 
         this.age = a; 
  } 


  public void Testpersonne() 
  {
    System.out.println("Nom : "+nom+" prenom : "+prenom+" age : "+age);} 

}