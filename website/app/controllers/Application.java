package controllers;

import play.*;
import play.mvc.*;

import views.html.*;

public class Application extends Controller {

    public Result index()
    {
        return ok(index.render("My first play app"));
    }

    public Result admin()
    {
        return ok(index.render("I have no idea what I'm doing"));
    }
}
