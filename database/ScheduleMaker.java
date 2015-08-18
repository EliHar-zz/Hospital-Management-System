import java.io.BufferedReader;
import java.io.BufferedWriter;
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
	
	public static void main(String[] args) {

		File output = new File("C:\\Users\\Sebouh\\Desktop\\output.txt");
		String id;
		String facility;
		String type;

		int paliativeMWF_AM = 0;
		int paliativeMWF_PM = 0;
		int paliativeTTS_AM = 0;
		int paliativeTTS_PM = 0;
		int paliativeSR_AM = 0;
		int paliativeSR_PM = 0;

		int childMWF_AM = 0;
		int childMWF_PM = 0;
		int childTTS_AM = 0;
		int childTTS_PM = 0;
		int childSR_AM = 0;
		int childSR_PM = 0;

		int surgMWF_AM = 0;
		int surgMWF_PM = 0;
		int surgTTS_AM = 0;
		int surgTTS_PM = 0;
		int surgSR_AM = 0;
		int surgSR_PM = 0;

		Calendar calendar = new GregorianCalendar(2012, 01, 01);

		
		try {
			BufferedReader in = new BufferedReader(new FileReader(
					"C:\\Users\\Sebouh\\Desktop\\nurseIds.txt"));
			String str;
			str = in.readLine();
			while ((str = in.readLine()) != null) {
				String[] ar = str.split(",");
				//System.out.println(ar[0] + " " + ar[1] + " " + ar[2]);
				id = ar[0];
				facility = ar[1];
				type = ar[2];

				if (facility.equals("1")) {
					if (paliativeMWF_AM < 10) {
						calendar.set(2012, 01, 02, 07, 00);
						writeSQL(id, facility, type, calendar);
						paliativeMWF_AM++;
					}
				} else if (facility.equals("2")) {

				} else if (facility.equals("3")) {

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
		BufferedWriter writer = new BufferedWriter(fileWriter);
		
		Calendar startShift = cal; 
		Calendar endShift = new GregorianCalendar();
		Calendar endDate  = new GregorianCalendar();
		endDate.set(2015, 06, 01, 00, 00);
		
		while(startShift.before(endDate)){
			int range = (3 - 0) + 1;
			int randomHours = 12 +  (int)(Math.random() * range) + 0;
			endShift.add(Calendar.HOUR_OF_DAY, randomHours);
			String start = DateFormat(startShift.getTime(), DATE_FORMAT);
			String end = DateFormat(endShift.getTime(), DATE_FORMAT);

			writer.write("INSERT INTO nurse_schedules ('nurse_id','start_time','end_time') VALUES "
				+ "("+ id + "," + start + "," + end + ")");
		
			writer.write(System.lineSeparator());
			
			startShift.add(Calendar.DAY_OF_MONTH, 2);
		}
		fileWriter.flush();
		fileWriter.close();
	}
	
    public static String DateFormat(Date date, String dateFormat) {
        SimpleDateFormat sdf = new SimpleDateFormat(dateFormat);

        if (date != null)
            return sdf.format(date);

        return null;
    }

}
