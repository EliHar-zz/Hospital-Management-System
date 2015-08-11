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
        return ok(index.render("Hi"));
    }
}