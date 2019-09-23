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

	public Servlet_JDBC_Connection() {
		super();
		// TODO Auto-generated constructor stub
	}

	public boolean getMySQLConnection(String hostName, String dbName, String userName, String password) {

		try {
			String connectionURL = "jdbc:mysql://" + hostName + "/" + dbName + "?user=" + userName + "&password="
					+ password;
			conn = DriverManager.getConnection(connectionURL);
			System.out.println("Connection Successful!");
			return true;

		} catch (SQLException ex) {
			System.out.println("Connection not Successful!");
			return false;
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
