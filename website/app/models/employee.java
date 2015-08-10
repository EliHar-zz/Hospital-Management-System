package models;

import com.avaje.ebean.Model;
import java.util.List;

public class Employee extends Model{

    public long id;
    public String first_name;
    public  String last_name;
    public String phone_number;
    public String start_date;
    public double salary;
    public int facility_id;
    public Enum type;

    public static Finder<Long, Employee> find = new Finder<Long, Employee>(Long.class, Employee.class);

    public Employee(){
    }

    public Employee(long id, String first_name, String last_name, String phone_number, String start_date, double salary, int facility_id, Enum type) {
        this.id = id;
        this.first_name = first_name;
        this.last_name = last_name;
        this.phone_number = phone_number;
        this.start_date = start_date;
        this.salary = salary;
        this.facility_id = facility_id;
        this.type = type;
    }

    public static List<Employee> all(){
        return find.all();
    }

    public static void create (Employee employee){
        employee.save();
    }

    public static void delete (Long id){
        find.ref(id).delete();
    }
}