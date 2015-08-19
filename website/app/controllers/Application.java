package controllers;

import play.mvc.*;
import play.data.*;
import static play.data.Form.*;
import views.html.*;
import models.*;
import java.util.*;

public class Application extends Controller {

    /**
     * Handle default path requests
     */
    public Result index() {

        return ok(
                index.render()
        );

    }

    public Result login() {
        return ok(
                login.render(form(Login.class))
        );
    }

    public Result admin() {
        return ok(
                admin.render()
        );
    }
    public static class Login {

        public String employee_id;
        public String password;
    }

//    public Result authenticate() {
//        Form<Login> loginForm = form(Login.class).bindFromRequest();
//
//            Person person = Form.form(Person.class).bindFromRequest().get();
//            JPA.em().persist(person);
//            return redirect(routes.Application.index());
//        }
//
//        return ok();
//    }
}


