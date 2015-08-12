package models;

import com.avaje.ebean.Model;

import javax.persistence.Table;
import java.util.List;

@javax.persistence.Entity
@Table(name = "Employees")
public class Employees extends Model {

    public long employee_id;
    public String first_name;
    public String last_name;
    public String phone_number;
    public String start_date;
    public double salary;
    public int facility_id;
    public String password;
    public Enum type;

    public static Finder<Long, Employees> find = new Finder<Long, Employees>(Long.class, Employees.class);

    public Employees() {
    }

    public Employees(long employee_id, String first_name, String last_name, String phone_number, String start_date, double salary, int facility_id, Enum type, String password) {
        this.employee_id = employee_id;
        this.first_name = first_name;
        this.last_name = last_name;
        this.phone_number = phone_number;
        this.start_date = start_date;
        this.salary = salary;
        this.facility_id = facility_id;
        this.type = type;
        this.password = password;
    }

    public static List<Employees> all() {
        return find.all();
    }

    public static void create(Employees employee) {
        employee.save();
    }

    public static void delete(Long id) {
        find.ref(id).delete();
    }

    public static Employees authenticate(long employee_id, String password) {
        return find.where()
                .eq("employee_id", employee_id)
                .eq("password", password)
                .findUnique();
    }
}