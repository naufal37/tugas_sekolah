///*
// * To change this license header, choose License Headers in Project Properties.
// * To change this template file, choose Tools | Templates
// * and open the template in the editor.
// */
//package lwjgl;
//import org.lwjgl.LWJGLException; 
//import org.lwjgl.Sys;
//import org.lwjgl.input.Keyboard; 
//import org.lwjgl.opengl.Display; 
//import org.lwjgl.opengl.DisplayMode; 
//import static org.lwjgl.opengl.GL11.*;
//import static org.lwjgl.util.glu.GLU.*;
///**
// *
// * @author naufal
// */
//public class Segitiga {
//String windowTitle = "Menggambar Segitiga"; public boolean closeRequested = false;
//
//    public void run() { createWindow(); initializeGL();    
//// main loop
//    while (!closeRequested) { pollInput(); 
//    updateLogic(); 
//    renderGL(); 
//    Display.update();}
//    cleanup();
//    }
//    private void initializeGL() {
//    int width = Display.getDisplayMode().getWidth(); int height = Display.getDisplayMode().getHeight();
//
//glViewport(0, 0, width, height); // Reset The Current Viewport glMatrixMode(GL_PROJECTION);	// Select The Projection Matrix glLoadIdentity(); // Reset The Projection Matrix
//gluPerspective(45.0f, ((float) width / (float) height), 0.1f, 100.0f);// Calculate The Aspect Ratio Of The Window
//glMatrixMode(GL_MODELVIEW);		// Select The Modelview Matrix glLoadIdentity();	// Reset The Modelview Matrix
//
//glShadeModel(GL_SMOOTH);	// Enables Smooth Shading
////GL11.glClearColor(0.0f, 0.0f, 0.0f, 0.0f); // Black Background glClearColor(0.20392156862f, 0.59607843137f, 0.85882352941f, 0.0f);
//glClearDepth(1.0f);	// Depth Buffer Setup glEnable(GL_DEPTH_TEST);	// Enables Depth Testing glDepthFunc(GL_LEQUAL);	// The Type Of Depth Test To Do glHint(GL_PERSPECTIVE_CORRECTION_HINT, GL_NICEST); // Really
//Nice Perspective Calculations
//}
//
//private void updateLogic() {
////
//}
//
//private void renderGL() {
//glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT); // Clear The Screen And The Depth Buffer
//glLoadIdentity(); // Reset The View
//
//glTranslatef(-1.5f, 0.0f, -6.0f); // Move Left 1.5 Units And Into The Screen 6.0
//
//glBegin(GL_TRIANGLES);	// Drawing Using Triangles glVertex3f(0.0f, 1.0f, 0.0f);	// Top
//glVertex3f(-1.0f, -1.0f, 0.0f); // Bottom Left glVertex3f(1.0f, -1.0f, 0.0f);	// Bottom Right
//glEnd();	// Finished Drawing The Triangle
//}
//
//public void pollInput() {
//
////scroll through key events 
//while (Keyboard.next()) {
//if (Keyboard.getEventKeyState()) {
//if (Keyboard.getEventKey() == Keyboard.KEY_ESCAPE) closeRequested = true;
//}
//}
//
//if (Display.isCloseRequested()) { closeRequested = true; }
//private void createWindow() { try {
//Display.setDisplayMode(new DisplayMode(640, 480)); Display.setVSyncEnabled(true); Display.setTitle(windowTitle);
//Display.create();
//} catch (LWJGLException e) {
//Sys.alert("Error", "Initialization failed!\n\n" + e.getMessage());
//System.exit(0);
//}
//}
//
//private void cleanup() { Display.destroy();
//}
//
//public static void main(String[] args) { segitiga tutorial = new segitiga(); tutorial.run();
//}}