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
                login.render()
        );
    }

    public Result admin() {
        return ok(
                admin.render()
        );
    }
//    public static class Login {
//
//        public String email;
//        public String password;
//
//    }
}


