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
import java.sql.SQLException;
import java.sql.ResultSet;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.Vector;
import java.sql.Date;

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

	public void deleteRow(String name) {
		try {
			Class.forName("com.mysql.jdbc.Driver");
			conn = DriverManager.getConnection(connectionURL);
			PreparedStatement st = conn.prepareStatement("DELETE FROM Table WHERE name = ?");
			st.setString(1, name);
			st.executeUpdate();
			conn.commit();
			System.out.println("Zeile erfolgreich gelöscht!");
			conn.close();

		} catch (Exception e) {
			System.out.println("Exception ist aufgetreten!");
			System.out.println(e.getMessage());
		}
	}

	public void addRow(String name) {
		try {
			conn = DriverManager.getConnection(connectionURL);
			Statement st = conn.createStatement();
			st.executeUpdate("INSERT INTO Customers " + "VALUES (1001, 'Simpson', 'Mr.', 'Springfield', 2001)");
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
		response.getWriter().append("Served at: ").append(request.getContextPath());
		PrintWriter out = response.getWriter();
		String contextParameterName = "anfangswert01";
		String contextParameterWert = this.getInitParameter(contextParameterName);
		out.println("Der Context-Parameter " + contextParameterName + " hat den Wert " + contextParameterWert + ".");
		getMySQLConnection("localhost", "fahrradverleih_mn", "root", "");
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		// TODO Auto-generated method stub
		getMySQLConnection("localhost", "fahrradverleih_mn", "root", "");
		doGet(request, response);
	}

}
