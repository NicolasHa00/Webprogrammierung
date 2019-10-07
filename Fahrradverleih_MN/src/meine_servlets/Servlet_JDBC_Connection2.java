package meine_servlets;

import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class Servlet_JDBC_Connection2
 */
@WebServlet("/Servlet_JDBC_Connection2")
public class Servlet_JDBC_Connection2 extends HttpServlet {

	private static final long serialVersionUID = 1L;

	Connection conn;
	String connectionURL;

	/**
	 * @see HttpServlet#HttpServlet()
	 */
	public Servlet_JDBC_Connection2() {
		super();
		// TODO Auto-generated constructor stub
	}

	public boolean getMySQLConnection(String hostName, String dbName, String userName, String password) {

		try {
			connectionURL = "jdbc:mysql://" + hostName + "/" + dbName + "?user=" + userName + "&password=" + password;
			conn = DriverManager.getConnection(connectionURL);
			System.out.println("Verbindung erfolgreich!");
			return true;

		} catch (SQLException ex) {
			System.out.println("Verbindung nicht erfolgreich!");
			return false;
		}
	}

	public void rückgabe(int id) {
		try {
			Class.forName("com.mysql.jdbc.Driver");
			conn = DriverManager.getConnection(connectionURL);
			int anzahlBestand = 0;
			int anzahlVerliehen = 0;
			String commandBestand = "SELECT anzahl FROM fahrradbestand WHERE id = ?";
			PreparedStatement prepStBestand = conn.prepareStatement(commandBestand);
			prepStBestand.setInt(1, id);
			ResultSet rsBestand = prepStBestand.executeQuery();
			while (rsBestand.next()) {
				anzahlBestand = rsBestand.getInt(1);
			}

			String commandVerliehen = "SELECT anzahl FROM verliehen WHERE id = ?";
			PreparedStatement prepStVerliehen = conn.prepareStatement(commandVerliehen);
			prepStVerliehen.setInt(1, id);
			ResultSet rsVerliehen = prepStVerliehen.executeQuery();
			while (rsVerliehen.next()) {
				anzahlVerliehen = rsVerliehen.getInt(1);
			}

			++anzahlBestand;
			--anzahlVerliehen;

			String updateBestand = "UPDATE fahrradbestand SET anzahl = ? WHERE id = ?";
			PreparedStatement prepStBestand2 = conn.prepareStatement(updateBestand);
			prepStBestand2.setInt(1, anzahlBestand);
			prepStBestand2.setInt(2, id);
			prepStBestand2.executeUpdate();
			System.out.println("Anzahl bei Bestand erfolgreich geupdated!");

			String updateVerliehen = "UPDATE verliehen SET anzahl = ? WHERE id = ?";
			PreparedStatement prepStVerliehen2 = conn.prepareStatement(updateVerliehen);
			prepStVerliehen2.setInt(1, anzahlVerliehen);
			prepStVerliehen2.setInt(2, id);
			prepStVerliehen2.executeUpdate();
			System.out.println("Anzahl bei Verliehen erfolgreich geupdated!");
			conn.close();

		} catch (Exception e) {
			System.out.println("Exception ist aufgetreten und Bestand nicht geupdated!");
			System.out.println(e.getMessage());
		}
	}

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		// TODO Auto-generated method stub
		getMySQLConnection("localhost", "fahrradverleih_mn", "root", "");
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
		String rückgabeIdString = request.getParameter("rückgabeId");
		int rückgabeIdInt = Integer.parseInt(rückgabeIdString);
		rückgabe(rückgabeIdInt);
	}

}
