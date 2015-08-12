package controllers;

import play.mvc.*;
import play.data.*;
import static play.data.Form.*;

import play.twirl.api.Html;
import views.html.*;
import models.*;
import play.data.validation.*;
import play.Logger;

import java.util.List;

public class Application extends Controller {

    /**
     * Handle default path requests
     */
    public Result index() {
        return ok(
                index.render("Welcome to My Hospital")
        );
    }

    public Result admin() {
        return ok(
                admin.render()
        );
    }

    public Result login() {
        Form<Employees> employeeLoginForm = form(Employees.class);
        return ok(
                loginForm.apply(employeeLoginForm)
        );
    }

    public Result authenticate() {
        Form<Employees> employeeLoginForm = form(Employees.class).bindFromRequest();

        long employee_id = employeeLoginForm.get().employee_id;
        String password = employeeLoginForm.get().password;

        List<Employees> listOfEmployees = Employees.authenticate(employee_id, password);

        if (listOfEmployees.isEmpty()) {
            return badRequest(loginForm.apply(employeeLoginForm));
        } else {

            for (Employees employee : listOfEmployees){
                Logger.info("Id :"+employee.employee_id+"\nPassword: "+employee.password);
            }

            session().clear();
            session("employee_id", employeeLoginForm.get().employee_id + "");
            Logger.info(employeeLoginForm.get().employee_id+"");
            return ok(
                    index.render("Welcome to My Hospital")
            );
        }
    }
}