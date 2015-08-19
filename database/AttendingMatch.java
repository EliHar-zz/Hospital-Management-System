import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.Date;
import java.util.GregorianCalendar;
import java.util.List;

public class AttendingMatch {
	public static void main(String[] args) {
		String doctorId;
		String juniorId;

		try {
			BufferedReader doc = new BufferedReader(new FileReader(
					"C:\\Users\\Sebouh\\Desktop\\doctorIds.txt"));
			String strD;
			ArrayList<String> docs = new ArrayList<String>();
			while ((strD = doc.readLine()) != null) {
				docs.add(strD);
			}
			doc.close();
			
			BufferedReader in = new BufferedReader(new FileReader(
					"C:\\Users\\Sebouh\\Desktop\\juniorEmployeeIds.txt"));
			String str;
			
			while ((str = in.readLine()) != null) {
				String[] ar = str.split(",");
				juniorId = ar[0];
			
				int range = (docs.size()-1 - 0);
				int randomIndex = (int)(Math.random() * range) + 0;
				writeSQL(juniorId, docs.get(randomIndex));
				

			}
			in.close();
		} catch (IOException e) {
			System.out.println("File Read Error");
		}

	}

	public static void writeSQL(String juniorId, String doctorId) throws IOException {
		File output = new File("C:\\Users\\Sebouh\\Desktop\\output.txt");
		FileWriter fileWriter = new FileWriter(output, true);
		

		fileWriter.write("INSERT INTO attending_of_junior (`attending_id`,`junior_id`) VALUES " + "("+ doctorId + "," + juniorId + ");");
		fileWriter.flush();
		fileWriter.write(System.lineSeparator());
			
		fileWriter.close();
	}
	
	public static void writeToFile(String text) throws IOException {
		File output = new File("C:\\Users\\Sebouh\\Desktop\\output.txt");
		FileWriter fileWriter = new FileWriter(output, true);
		

		fileWriter.write(text);
		fileWriter.flush();
		fileWriter.write(System.lineSeparator());
			
		
		fileWriter.close();
	}
	

}
