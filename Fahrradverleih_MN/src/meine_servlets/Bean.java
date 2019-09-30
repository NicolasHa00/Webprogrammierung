package meine_servlets;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.Statement;
import java.sql.ResultSet;
import java.sql.SQLException;

public class Bean {

	private String message;
	private int anzahl;
	private int id;
	private Connection conn;
	private ResultSet rs;
	private PreparedStatement prepSt;
	String connectionURL = "jdbc:mysql://localhost/fahrradverleih_mn?user=root&password=";

	public Bean() {

		try {

			conn = DriverManager.getConnection(connectionURL);
			System.out.println("Verbindung erfolgreich!");

		} catch (SQLException ex) {
			System.out.println("Verbindung nicht erfolgreich!");
		}
	}
	
	public void setmessage(String message) {

		this.message = message;
	}

	public String getmessage() {

		return this.message;
	}

	public void setAnzahl(int anzahl) {

		this.anzahl = anzahl;
	}

	public int getAnzahl() {

		return this.anzahl;
	}
	
	public void setId(int id) {
		
		this.id = id;
	}
	
	public int getId() {
		
		return this.id;
	}

	public void leseAnzahl(int id) throws SQLException {

		String command = "SELECT anzahl FROM fahrradbestand WHERE id = ?";
		prepSt = conn.prepareStatement(command);
		prepSt.setInt(1, id);
		rs = prepSt.executeQuery();
		while (rs.next()) {
			anzahl = rs.getInt(1);
		}
	}
}
