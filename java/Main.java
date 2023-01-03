public class Main {

    public static void main(String[] args) {
     // creation des instances
        // constucteur1
     Personne personne1 = new Personne();
        // constucteur2
     Personne personne2 = new Personne("nom2","prenom2");
        // constucteur3
     Personne personne3 = new Personne("nom3","prenom3",20);
        // constucteur4
     Personne personne4 = new Personne("nom4", "prenom3","f",22);

    // Afichage on appel la methode toString
        System.out.println(personne1.tostring());
        System.out.println(personne2.tostring());
        System.out.println(personne3.tostring());
        System.out.println(personne4.tostring());

    }
}