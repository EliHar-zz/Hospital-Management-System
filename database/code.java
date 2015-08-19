
import java.io.*;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.Date;
import java.util.GregorianCalendar;

/**
 * Created by Rich on 2015-08-17.
 */
public class code {
    static ArrayList<Integer> pallServ = new ArrayList<Integer>();
    static ArrayList<Integer> chilServ = new ArrayList<Integer>();
    static ArrayList<Integer> surgServ = new ArrayList<Integer>();
    static int index = 1;
    
	public static void main(String[] args) {
		

	
	        SimpleDateFormat sdf = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
	try {
	        File file = new File("C:\\Users\\Sebouh\\Desktop\\visits.txt");
	        File facility_services = new File("C:\\Users\\Sebouh\\Desktop\\facility_services.txt");
	        File services = new File("C:\\Users\\Sebouh\\Desktop\\services.txt");
	        FileReader fr = new FileReader(file);
	        FileReader fs = new FileReader(facility_services);
	        FileReader serv = new FileReader(services);
	        BufferedReader br = new BufferedReader(fr);
	        BufferedReader bfs = new BufferedReader(fs);
	        BufferedReader bs = new BufferedReader(serv);
	
	        ArrayList<Integer> serviceTable = new ArrayList<Integer>();
	
	        String facilReader;
	
	        while ((facilReader = bfs.readLine()) != null) {
	            String arr[] = facilReader.split(",");
	
	
	            if (arr[0].equals("1")) {
	                pallServ.add(Integer.valueOf(arr[1]));
	            } else if (arr[0].equals("2")) {
	                chilServ.add(Integer.valueOf(arr[1]));
	            } else if (arr[0].equals("3")) {
	                surgServ.add(Integer.valueOf(arr[1]));
	            }
	        }
	
	            String servReader;
	
	            while ((servReader = bs.readLine()) != null) {
	                String array[] = servReader.split(",");
	                serviceTable.add(Integer.valueOf(array[4]));
	            }
	
	            String line;
	            while ((line = br.readLine()) != null) {
	                String ar[] = line.split(",");
	                Calendar start_date = new GregorianCalendar(Integer.parseInt(ar[2]), Integer.parseInt(ar[3]), Integer.parseInt(ar[4]));
	                Calendar end_date = new GregorianCalendar(Integer.parseInt(ar[5]), Integer.parseInt(ar[6]), Integer.parseInt(ar[7]));
	                int timeDifference = getDifferenceDates(start_date.getTime(), end_date.getTime());
	
	                Calendar daily = new GregorianCalendar();
	                Calendar daily_end = new GregorianCalendar();
	                daily.setTime(start_date.getTime());
	
	                for (int i = 0; i < timeDifference + 1; i++) {
	                    int numOfServices = 1 + (int) (Math.random() * ((3 - 1) + 1));
	                    for (int j = 0; j < numOfServices; j++) {
	
	                        String servID = assignRandomService(ar[8]);
	
	                        int randomHours = 0 + (int) (Math.random() * ((3 - 0) + 1));
	                        daily.add(Calendar.HOUR_OF_DAY, randomHours);
	                        daily_end.setTime(daily.getTime());
	                        daily_end.add(Calendar.HOUR_OF_DAY, serviceTable.get(Integer.parseInt(servID)));
	
	                        createSQLstatement(ar, daily, daily_end, servID);
	
	                        daily.add(Calendar.HOUR_OF_DAY, 1);
	                    }
	                    daily.setTime(start_date.getTime());
	                    daily.add(Calendar.DAY_OF_MONTH, i + 1);
	                }
	            }
	            br.close();
	            bfs.close();
	            bs.close();
		} catch (IOException e) {
			System.out.println("File Read Error");
		}
	}
	
	    public static void createSQLstatement(String[] arr, Calendar start_date, Calendar end_date, String service) throws IOException {
	        File file = new File("C:\\Users\\Sebouh\\Desktop\\services_per_visit.txt");
	        FileWriter fw = new FileWriter(file, true);
	        BufferedWriter writer = new BufferedWriter(fw);
	        
	        
	        SimpleDateFormat sdf = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
	        sdf.setTimeZone(start_date.getTimeZone());
	        sdf.setTimeZone(end_date.getTimeZone());
	        String start = sdf.format(start_date.getTime());
	        String end = sdf.format(end_date.getTime());
	        int floor = 1 + (int) (Math.random() * ((3 - 1) + 1));
	        int room = 1 + (int) (Math.random() * ((3 - 1) + 1));
	
	
	        writer.write("INSERT INTO appmo489_hospital.services_per_visit(services_per_visit_id, visits_id, service_id, start_date, end_date, facility_id, " +
	                "floor_number, room_number) VALUES (" + index + "," + arr[0] + "," + service + ",'" + start + "','" + end + "'," + arr[8] + "," +
	                floor + "," + room + ");");
	        writer.newLine();
	        writer.flush();
	        index++;
	    }
	
	    public static int getDifferenceDates(Date minDate, Date maxDate) {
	        if (minDate.after(maxDate))
	            throw new IllegalArgumentException("Min date should be at most the same as Max date!");
	        long diff = maxDate.getTime() - minDate.getTime();
	        return (int) (diff / (24 * 60 * 60 * 1000));
	    }
	    
	
	    public static String assignRandomService(String f_id) {
	        String result;
	
	        if (f_id.equals("1")) {
	            int size = pallServ.size() - 1;
	            int random = (int) (Math.random() * size);
	            return result = pallServ.get(random).toString();
	        }
	        else if (f_id.equals("2")) {
	            int size = chilServ.size() - 1;
	            int random = (int) (Math.random() * size);
	            return result = chilServ.get(random).toString();
	        }
	        else if (f_id.equals("3")) {
	            int size = surgServ.size() - 1;
	            int random = (int) (Math.random() * size);
	            return result = surgServ.get(random).toString();
	        }
	        else return null;
	    }
	
}




