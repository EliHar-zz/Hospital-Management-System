import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;
import java.util.GregorianCalendar;

public class ScheduleMaker {
	final static String DATE_FORMAT = "yyyy-MM-dd HH:mm:ss";
	static int EmployeeCounter = 1;
	
	public static void main(String[] args) {
		String id;
		String facility;
		String type;

		int paliativeMWF_AM = 0;
		int paliativeMWF_PM = 0;
		int paliativeTTS_AM = 0;
		int paliativeTTS_PM = 0;

		int childMWF_AM = 0;
		int childMWF_PM = 0;
		int childTTS_AM = 0;
		int childTTS_PM = 0;

		int surgMWF_AM = 0;
		int surgMWF_PM = 0;
		int surgTTS_AM = 0;
		int surgTTS_PM = 0;

		Calendar calendar = new GregorianCalendar(2012, 01, 01);

		try {
			BufferedReader in = new BufferedReader(new FileReader(
					"C:\\Users\\Sebouh\\Desktop\\nurseIds.txt"));
			String str;
			while ((str = in.readLine()) != null) {
				String[] ar = str.split(",");
				id = ar[0];
				facility = ar[1];
				type = ar[2];

				if (facility.equals("1")) {
					if (paliativeMWF_AM < 9) {
						calendar.set(2012, 01, 02, 07, 00);
						writeSQL(id, facility, type, calendar);
						paliativeMWF_AM++;
					}
					else if (paliativeMWF_PM < 6) {
						calendar.set(2012, 01, 02, 19, 00);
						writeSQL(id, facility, type, calendar);
						paliativeMWF_PM++;
					}
					
					else if (paliativeTTS_AM < 9) {
						calendar.set(2012, 01, 03, 07, 00);
						writeSQL(id, facility, type, calendar);
						paliativeTTS_AM++;
					}
					else if (paliativeTTS_PM < 6) {
						calendar.set(2012, 01, 03, 19, 00);
						writeSQL(id, facility, type, calendar);
						paliativeTTS_PM++;
					}
				} else if (facility.equals("2")) {
					if (childMWF_AM < 9) {
						calendar.set(2012, 01, 02, 07, 00);
						writeSQL(id, facility, type, calendar);
						childMWF_AM++;
					}
					else if (childMWF_PM < 6) {
						calendar.set(2012, 01, 02, 19, 00);
						writeSQL(id, facility, type, calendar);
						childMWF_PM++;
					}
					else if (childTTS_AM < 9) {
						calendar.set(2012, 01, 03, 07, 00);
						writeSQL(id, facility, type, calendar);
						childTTS_AM++;
					}
					else if (childTTS_PM < 6) {
						calendar.set(2012, 01, 03, 19, 00);
						writeSQL(id, facility, type, calendar);
						childTTS_PM++;
					}
				} else if (facility.equals("3")) {
					if (surgMWF_AM < 9) {
						calendar.set(2012, 01, 02, 07, 00);
						writeSQL(id, facility, type, calendar);
						surgMWF_AM++;
					}
					else if (surgMWF_PM < 6) {
						calendar.set(2012, 01, 02, 19, 00);
						writeSQL(id, facility, type, calendar);
						surgMWF_PM++;
					}
					else if (surgTTS_AM < 9) {
						calendar.set(2012, 01, 03, 07, 00);
						writeSQL(id, facility, type, calendar);
						surgTTS_AM++;
					}
					else if (surgTTS_PM < 6) {
						calendar.set(2012, 01, 03, 19, 00);
						writeSQL(id, facility, type, calendar);
						surgTTS_PM++;
					}
				}

			}
			in.close();
		} catch (IOException e) {
			System.out.println("File Read Error");
		}

	}

	public static void writeSQL(String id, String facility, String type, Calendar cal) throws IOException {
		File output = new File("C:\\Users\\Sebouh\\Desktop\\output.txt");
		FileWriter fileWriter = new FileWriter(output, true);
		
		Calendar startShift = cal; 
		Calendar endShift = new GregorianCalendar();
		Calendar endDate  = new GregorianCalendar();
		endDate.set(2015, 06, 01, 00, 00);
		
		while(startShift.before(endDate)){
			endShift.setTime(startShift.getTime());
			int range = (3 - 0) + 1;
			int randomHours = 12 +  (int)(Math.random() * range) + 0;
			endShift.add(Calendar.HOUR_OF_DAY, randomHours);
			String start = DateFormat(startShift.getTime(), DATE_FORMAT);
			String end = DateFormat(endShift.getTime(), DATE_FORMAT);

			fileWriter.write("INSERT INTO nurse_schedules (`nurse_id`,`start_time`,`end_time`) VALUES " + "("+ id + ",'" + start + "','" + end + "');");
			fileWriter.flush();
			fileWriter.write(System.lineSeparator());
			
			startShift.add(Calendar.DAY_OF_MONTH, 2);
		}
		
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
	
    public static String DateFormat(Date date, String dateFormat) {
        SimpleDateFormat sdf = new SimpleDateFormat(dateFormat);

        if (date != null)
            return sdf.format(date);

        return null;
    }

}
