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
<<<<<<< HEAD
}
=======
}
>>>>>>> f49daa688aeb412191b9ad7edd13b31073d2f4e1
