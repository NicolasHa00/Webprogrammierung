package meine_servlets;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

/**
 * Servlet implementation class Servlet_JDBC_Connection
 */
@WebServlet("/Servlet_JDBC_Connection")
public class Servlet_JDBC_Connection extends HttpServlet {

	private static final long serialVersionUID = 1L;
	Connection conn;
	String connectionURL;

	public Servlet_JDBC_Connection() {
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

	public void bestandUpdate(int id) {
		try {
			Class.forName("com.mysql.jdbc.Driver");
			conn = DriverManager.getConnection(connectionURL);
			int anzahl = 0;
			String command = "SELECT anzahl FROM fahrradbestand WHERE id = ?";
			PreparedStatement prepSt = conn.prepareStatement(command);
			prepSt.setInt(1, id);
			ResultSet rs = prepSt.executeQuery();
			while(rs.next()) {
				anzahl = rs.getInt(1);
			}
			System.out.println("Die Anzahl ist: " + anzahl);
			--anzahl;
			String update = "UPDATE fahrradbestand SET anzahl = ? WHERE id = ?";
			PreparedStatement prepSt2 = conn.prepareStatement(update);
			prepSt2.setInt(1, anzahl);
			prepSt2.setInt(2, id);
			prepSt2.executeUpdate();
			System.out.println("Anzahl erfolgreich geupdated!");
			conn.close();

		} catch (Exception e) {
			System.out.println("Exception ist aufgetreten!");
			System.out.println(e.getMessage());
		}
	}

	public void verleihUpdate(int id) {
		try {
			Class.forName("com.mysql.jdbc.Driver");
			conn = DriverManager.getConnection(connectionURL);
			int anzahl = 0;
			String command = "SELECT anzahl FROM verliehen WHERE id = ?";
			PreparedStatement prepSt = conn.prepareStatement(command);
			prepSt.setInt(1, id); 
			ResultSet rs = prepSt.executeQuery();
			while(rs.next()) {
				anzahl = rs.getInt(1);
			}
			System.out.println("Die Anzahl ist: " + anzahl);
			++anzahl;
			String update = "UPDATE verliehen SET anzahl = ? WHERE id = ?";
			PreparedStatement prepSt2 = conn.prepareStatement(update);
			prepSt2.setInt(1, anzahl);
			prepSt2.setInt(2, id);
			prepSt2.executeUpdate();
			System.out.println("Anzahl erfolgreich geupdated!");
			conn.close();

		} catch (Exception e) {
			System.out.println("Exception ist aufgetreten!");
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
	/*	response.getWriter().append("Served at: ").append(request.getContextPath());
		PrintWriter out = response.getWriter();
		String contextParameterName = "anfangswert01";
		String contextParameterWert = this.getInitParameter(contextParameterName);
		out.println("Der Context-Parameter " + contextParameterName + " hat den Wert " + contextParameterWert + "."); */
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
		String idString = request.getParameter("id");
		int id = Integer.parseInt(idString);
		bestandUpdate(id);
		verleihUpdate(id);
		
		
		
	}

}
