/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package lwjgl;
import java.util.logging.Level; 
import java.util.logging.Logger; 
import org.lwjgl.LWJGLException; 
import org.lwjgl.input.Keyboard; 
import org.lwjgl.input.Mouse; 
import org.lwjgl.opengl.Display;
import org.lwjgl.opengl.DisplayMode; 
import static org.lwjgl.opengl.GL11.*;
import static org.lwjgl.util.glu.GLU.gluOrtho2D;


/**
 *
 * @author naufal
 */
public class LWJGL {
public int DISPLAY_WIDTH = 200; public int DISPLAY_HEIGHT = 200;

public void render(){ 
    glClear(GL_COLOR_BUFFER_BIT); 
    glLoadIdentity(); 
    glColor3f(9.0f,9.0f,0.0f); 
    glPointSize(10); 
    glBegin(GL_POINTS); 
    glVertex2f(150,150);
glEnd();
glFlush();
}

public static void main(String[] args) {
LWJGL main = null; try {
System.out.println("Keys:"); System.out.println("esc - Exit"); main = new LWJGL(); main.create();
main.run();
} catch (Exception ex) { Logger.getLogger(LWJGL.class.getName()).log(Level.SEVERE, null, ex);
}finally{
if(main != null){ main.destroy();
}
}
}

private void create() throws LWJGLException{ Display.setDisplayMode(new
DisplayMode(DISPLAY_HEIGHT,DISPLAY_WIDTH));
Display.setFullscreen(false); Display.setTitle("Projek Naufal"); Display.create(); Keyboard.create(); Mouse.setGrabbed(false); Mouse.create();
initGL(); resizeGL();
}

private void run(){ while(!Display.isCloseRequested() &&
!Keyboard.isKeyDown(Keyboard.KEY_ESCAPE)){ if(Display.isVisible()){
render();
}else{
if(Display.isDirty()){ render();
}try {
Thread.sleep(100);
} catch (InterruptedException ex) {
}
}
Display.update(); Display.sync(60);
}
}

private void destroy(){ Mouse.destroy(); Keyboard.destroy(); Display.destroy();
}
private void initGL(){ glClearColor(0.0f,0.0f,0.0f,0.0f); 
glDisable(GL_DEPTH_TEST); 
glDisable(GL_LIGHTING);}

private void resizeGL(){ glViewport(0,0,DISPLAY_WIDTH,DISPLAY_HEIGHT);
glMatrixMode(GL_PROJECTION); 
glLoadIdentity();
gluOrtho2D(0.0f,DISPLAY_WIDTH,0.0f,DISPLAY_HEIGHT);
glPushMatrix(); 
glMatrixMode(GL_MODELVIEW);
glLoadIdentity(); 
glPushMatrix();
}
}