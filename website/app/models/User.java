package models;

import com.avaje.ebean.*;
import controllers.routes;
import play.data.Form;
import play.mvc.Result;
import javax.persistence.*;
import java.util.List;

@javax.persistence.Entity
@Table(name = "employees")
public class User extends Model{

    public String username;
    public String password;

    public static Model.Finder<String, User> find = new Model.Finder(String.class, User.class);

    public static User authenticate(String username, String password) {
        return find.where()
                .eq("username", username)
                .eq("password", password)
                .findUnique();
    }
}
