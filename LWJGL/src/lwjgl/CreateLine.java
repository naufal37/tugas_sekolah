/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package lwjgl;
import java.util.logging.Level; 
import java.util.logging.Logger; 
import javafx.scene.control.TableView;
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
public class CreateLine {
    public int DISPLAY_WIDTH = 600; public int DISPLAY_HEIGHT = 800;

public void render(){ glColor3f(1.0f,0.0f,1.0f);
glLineWidth(5);
glBegin(GL_LINES); 
glVertex2f(100,100);
glVertex2f(100,350); glEnd();
glFlush();
}

public static void main(String[] args) {
CreateLine main = null; 
try {
System.out.println("Keys:"); 
System.out.println("esc - Exit"); 
main = new CreateLine(); 
main.create();
main.run();
} 
catch (Exception ex) { Logger.getLogger(CreateLine.class.getName()).log(Level.SEVERE, null,ex);}

finally{
if(main != null){ main.destroy();}}
}

private void create() throws LWJGLException{ Display.setDisplayMode(new
DisplayMode(DISPLAY_HEIGHT,DISPLAY_WIDTH));
Display.setFullscreen(false); 
Display.setTitle("Create Point"); 
Display.create(); 
Keyboard.create(); 
Mouse.setGrabbed(false); 
Mouse.create();
initGL();
resizeGL();
}

private void run(){
while(!Display.isCloseRequested() &&
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

private void initGL(){ glClearColor(0.0f,0.0f,0.0f,0.0f); glDisable(GL_DEPTH_TEST); glDisable(GL_LIGHTING);
}

private void resizeGL(){ 
    glViewport(0,0,DISPLAY_HEIGHT,DISPLAY_WIDTH);
    glMatrixMode(GL_PROJECTION); 
    glLoadIdentity();
    gluOrtho2D(0.0f,DISPLAY_HEIGHT,0.0f,DISPLAY_WIDTH);
    glPushMatrix(); 
    glMatrixMode(GL_MODELVIEW); 
    glLoadIdentity(); 
    glPushMatrix();
}
}
