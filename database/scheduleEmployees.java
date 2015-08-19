
import java.io.*;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.Date;
import java.util.GregorianCalendar;

/**
 * Created by Rich on 2015-08-17.
 */
public class scheduleEmployees {
	public static void main(String[] args) {
		
	try {
	        File services = new File("C:\\Users\\Sebouh\\Desktop\\services.txt");
	        File bigServ = new File("C:\\Users\\Sebouh\\Desktop\\spv.txt");
	        File nurse = new File("C:\\Users\\Sebouh\\Desktop\\nurse_schedules.txt");
	        File doctor = new File("C:\\Users\\Sebouh\\Desktop\\doctor_schedules.txt");
	        File intern = new File("C:\\Users\\Sebouh\\Desktop\\juniorDoctor_schedules.txt");
	        File surgNurse = new File("C:\\Users\\Sebouh\\Desktop\\surgery_nurse_schedules.txt");
	        
	        FileReader servicess = new FileReader(services);
	        FileReader bigServs = new FileReader(bigServ);
	        FileReader nursee = new FileReader(nurse);
	        FileReader surgNursess = new FileReader(surgNurse);
	        FileReader doctorr = new FileReader(doctor);
	        FileReader internn = new FileReader(intern);

	        BufferedReader br = new BufferedReader(servicess);
	        BufferedReader bfs = new BufferedReader(nursee);
	        BufferedReader bs = new BufferedReader(doctorr);
	        BufferedReader bds = new BufferedReader(internn);
	        BufferedReader biggs = new BufferedReader(bigServs);
	        BufferedReader bdddd = new BufferedReader(surgNursess);
	
	        ArrayList<String> nurses = new ArrayList<String>();
	        ArrayList<String> surgeryNurses = new ArrayList<String>();
	        ArrayList<String> doctors = new ArrayList<String>();
	        ArrayList<String> interns = new ArrayList<String>();

	        System.out.println("Starting");
	        
	        String reader;
	        // NURSES
	        while ((reader = bfs.readLine()) != null) {
	            nurses.add(reader);
	            
	        }
	        
	        // Surgery_Nurses
	        while ((reader = bdddd.readLine()) != null) {
	            surgeryNurses.add(reader);
	        }
	        
	        // DOCTORS
	        while ((reader = bs.readLine()) != null) {
	           doctors.add(reader);
	        }
	        
	        // INTERNS
	        while ((reader = bds.readLine()) != null) {
	            interns.add(reader);
	        }
	        
	        System.out.println("Populated");

	        
	        int nurseSize = nurses.size();
	        int surgeryNurseSize = surgeryNurses.size();
	        int doctorSize = doctors.size();
	        int internSize = interns.size();
	
	        // SERVICES MAIN LOOP
	        String serviceReader;
	        while ((serviceReader = biggs.readLine()) != null) {
		        System.out.println("STARTING BIG LOOP");

	            String currentService[] = serviceReader.split(",");
	            
	            // 0 = services per visit id
	            // 1 = visits_id
	            // 2 = service_id
	            // 3 = start date 
	            // 4 = end date 
	            // 5 = facility
	            // 6 = floor num
	            // 7 = room num
	            // 8 = service_complexity
	            
	            int randomNurse = -1;
	            int randomSurgNurse = -1;
	            int randomDoctor = -1;
	            int randomIntern = -1;
	            
	            // CHECK COMPLEXITY AND GET RANDOM VALUES
	            if (currentService[8].equals("basic")){
		            // Basic = nurse
	            	randomNurse = 0 + (int) (Math.random() * ((nurseSize-1 - 0) + 1));
	            }else if (currentService[8].equals("specialized")){
		            // Specialized = doctor and intern
	            	randomDoctor = 0 + (int) (Math.random() * ((doctorSize-1 - 0) + 1));
	            	randomIntern = 0 + (int) (Math.random() * ((internSize-1 - 0) + 1));
	            }else if (currentService[8].equals("surgery")){
		            // Surgeries = doctor and intern and surgNurse
	            	randomDoctor = 0 + (int) (Math.random() * ((doctorSize-1 - 0) + 1));
	            	randomIntern = 0 + (int) (Math.random() * ((internSize-1 - 0) + 1));
	            	randomSurgNurse = 0 + (int) (Math.random() * ((surgeryNurseSize-1 - 0) + 1));
	            }
		        System.out.println("Nurse " +randomNurse);
		        System.out.println("Doc "  + randomDoctor);
		        System.out.println("Surg " +randomSurgNurse);
		        System.out.println("Intern " + randomIntern);

		        System.out.println("FINISHED GETTING RANDOMS");

	            int counter = 0;
	            // GET ELIGIBLE WORKERS WHO MATCH FACILITY AND COMPLEXITY
	            // Check if nurse
	            if (randomNurse != -1){
			        System.out.println("Getting nurse");

	            	boolean found = false;
	            	// Go through nurse array and pick
	            	while (!found){
		            	String temp = nurses.get(randomNurse);
		            	String[] tempNurse = temp.split(",");
		            	// 2 - Start date
		            	// 3 - End date
		            	// 4 - Facility
		            	
		            	// Check if facility
		            	if (tempNurse[4].equals(currentService[5])){
		            		// Check if start date of service is after start date of employee
		            		if (tempNurse[2].compareTo(currentService[3]) <= 0){
		            			System.out.println(tempNurse[2]);
		            			System.out.println(currentService[3]);
		            			System.out.println(tempNurse[2].compareTo(currentService[3]));
		            			System.out.println(tempNurse[2].compareTo(currentService[3]) <= 0);
		            			// Check if end date of employee is after end date of service
		            			if (tempNurse[3].compareTo(currentService[4]) >= 0){
		            				System.out.println(tempNurse[2]);
			            			System.out.println(currentService[3]);
			            			System.out.println(tempNurse[2].compareTo(currentService[3]));
			            			System.out.println(tempNurse[2].compareTo(currentService[3]) <= 0);
		            				found = true;
		            				createSQLnurse(tempNurse[1], currentService[0]);	            
		            			}
		            		}
		            	}
		            	
		            	randomNurse++;
		            	if (randomNurse > nurses.size()-1)
		            		randomNurse = 0;
	            	}
	            }
	            
	            // Check if doctor 
	            if (randomDoctor != -1){
	            	boolean found = false;
	            	// Go through nurse array and pick
	            	while (!found){
		            	String temp = doctors.get(randomDoctor);
		            	String[] tempDoc = temp.split(",");
		            	// 2 - Start date
		            	// 3 - End date
		            	// 4 - Facility
		            	
		            	// Check if facility
		            	if (tempDoc[4].equals(currentService[5])){
		            		// Check if start date of service is after start date of employee
		            		if (tempDoc[2].compareTo(currentService[3]) <= 0){
		            			// Check if end date of employee is after end date of service
		            			if (tempDoc[3].compareTo(currentService[4]) >= 0){
		            				found = true;
		            				createSQLdoctor(tempDoc[1], currentService[0]);	            
		            			}
		            		}
		            	}
		            	randomDoctor++;
		            	if (randomDoctor > doctors.size()-1)
		            		randomDoctor = 0;
	            	}
	            	
	            }
	            
	            // Check if intern
	            if (randomIntern != -1){
	            	boolean found = false;
	            	// Go through nurse array and pick
	            	while (!found){
		            	String temp = interns.get(randomIntern);
		            	String[] tempIntern = temp.split(",");
		            	// 2 - Start date
		            	// 3 - End date
		            	// 4 - Facility
		            	
		            	// Check if facility
		            	if (tempIntern[4].equals(currentService[5])){
		            		// Check if start date of service is after start date of employee
		            		if (tempIntern[2].compareTo(currentService[3]) <= 0){
		            			// Check if end date of employee is after end date of service
		            			if (tempIntern[3].compareTo(currentService[4]) >= 0){
		            				found = true;
		            				createSQLintern(tempIntern[1], currentService[0]);	            
		            			}
		            		}
		            	}
		            	randomIntern++;
		            	if (randomIntern > interns.size()-1)
		            		randomIntern = 0;
	            	}
	
	            }
	            
	            // Check if surgical nurse
	            if (randomSurgNurse != -1){
	            	boolean found = false;
	            	// Go through nurse array and pick
	            	while (!found){
		            	String temp = surgeryNurses.get(randomSurgNurse);
		            	String[] tempSurgNurse = temp.split(",");
		            	// 2 - Start date
		            	// 3 - End date
		            	// 4 - Facility
		            	
		            	// Check if facility
		            	if (tempSurgNurse[4].equals(currentService[5])){
		            		// Check if start date of service is after start date of employee
		            		if (tempSurgNurse[2].compareTo(currentService[3]) <= 0){
		            			// Check if end date of employee is after end date of service
		            			if (tempSurgNurse[3].compareTo(currentService[4]) >= 0){
		            				found = true;
		            				createSQLsurgerynurse(tempSurgNurse[1], currentService[0]);	            
		            			}
		            		}
		            	}
		            	randomSurgNurse++;
		            	if (randomSurgNurse > surgeryNurses.size()-1)
		            		randomSurgNurse = 0;
	            	}
	
	            }
	            
		        System.out.println("END OF BIG WHILE");

	            
	        } // end of while
	            
	        System.out.println("FINISHED");

	            br.close();
	            bfs.close();
	            bs.close();
	            bds.close();
	            biggs.close();
	            bdddd.close();
		} catch (IOException e) {
			System.out.println("File Read Error");
		}
	}
	
	    public static void createSQLnurse(String nsID, String serviceId)throws IOException {
	        File file = new File("C:\\Users\\Sebouh\\Desktop\\servicesOutput.txt");
	        FileWriter fw = new FileWriter(file, true);
	        BufferedWriter writer = new BufferedWriter(fw);
	        
	        writer.write("INSERT INTO appmo489_hospital.nurse_services(ns_id, service_in_visit_id) VALUES ("
	        + nsID + "," + serviceId + ");");
	        writer.newLine();
	        writer.flush();
	    }
	
	    
	    
	    public static void createSQLsurgerynurse(String nsID, String serviceId)throws IOException {
	        File file = new File("C:\\Users\\Sebouh\\Desktop\\servicesOutput.txt");
	        FileWriter fw = new FileWriter(file, true);
	        BufferedWriter writer = new BufferedWriter(fw);
	        
	        writer.write("INSERT INTO appmo489_hospital.nurse_services(ns_id, service_in_visit_id) VALUES ("
	        + nsID + "," + serviceId + ");");
	        writer.newLine();
	        writer.flush();
	    }
	    
	    public static void createSQLdoctor(String nsID, String serviceId)throws IOException {
	        File file = new File("C:\\Users\\Sebouh\\Desktop\\servicesOutput.txt");
	        FileWriter fw = new FileWriter(file, true);
	        BufferedWriter writer = new BufferedWriter(fw);
	        
	        writer.write("INSERT INTO appmo489_hospital.doctor_services(drs_id, service_in_visit_id) VALUES ("
	        + nsID + "," + serviceId + ");");
	        writer.newLine();
	        writer.flush();
	    }
	    
	    public static void createSQLintern(String nsID, String serviceId)throws IOException {
	        File file = new File("C:\\Users\\Sebouh\\Desktop\\servicesOutput.txt");
	        FileWriter fw = new FileWriter(file, true);
	        BufferedWriter writer = new BufferedWriter(fw);
	        
	        writer.write("INSERT INTO appmo489_hospital.juniorDoctor_services(jds_id, service_in_visit_id) VALUES ("
	        + nsID + "," + serviceId + ");");
	        writer.newLine();
	        writer.flush();
	    }
	
}




