package models;

import com.sun.tools.javac.code.Attribute;

public class employee {

    private int id;
    private String first_name;
    private  String last_name;
    private String phone_number;
    private String start_date;
    private double salary;
    private int facility_id;
    private Enum type;

    public employee(){

    }

    public employee(int id, String first_name, String last_name, String phone_number, String start_date, double salary, int facility_id, Enum type) {
        this.id = id;
        this.first_name = first_name;
        this.last_name = last_name;
        this.phone_number = phone_number;
        this.start_date = start_date;
        this.salary = salary;
        this.facility_id = facility_id;
        this.type = type;
    }
}
