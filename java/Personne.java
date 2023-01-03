public class Personne {
    // les attributs
    private String nom;
    private String prenom;
    private String sexe;
    private int age;
// les constructeurs
    public Personne() {
    }

    public Personne(String nom,String prenom) {
        this.nom = nom;
        this.prenom = prenom;
    }

    public Personne(String nom, String prenom, int age) {
        this.nom = nom;
        this.prenom = prenom;
        this.age = age;
    }

    public Personne(String nom, String prenom, String sexe, int age) {
        this.nom = nom;
        this.prenom = prenom;
        this.sexe = sexe;
        this.age = age;
    }

    public Personne(Personne personne) {
        this.nom = nom;
        this.prenom = prenom;
        this.sexe = sexe;
        this.age = age;
    }
// les getteurs pour les accés des attributs
    public String getNom() {
        return nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public String getSexe() {
        return sexe;
    }

    public int getAge() {
        return age;
    }

    //les setteurs pour la gestions des attributs

    public void setNom(String nom) {
        this.nom = nom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public void setSexe(String sexe) {
        this.sexe = sexe;
    }

    public void setAge(int age) {
        if (age > 0) {
            this.age=age;
        }
    }
    //fonction pour l'affichage
 public String tostring(){
        return"("+this.nom+ "," +this.prenom+","+this.age+","+this.sexe+")";
 }

}
